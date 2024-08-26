class Menu {
	constructor (selector, options) {
		const defaultOptions = {
			lockOnOpen: true,
			closeOnSelect: false,
			closeOnOutside: true,
			isOpen: false,
		};

		this.options = Object.assign(defaultOptions, options);

		this.classes = {
			lock: '_lock',
			hover: '_hover',
			visible: '_visible',
			active: '_active',
			toright: '_toright',
			toleft: '_toleft',
		};

		this.selector = selector;
		this.menuSelector = `[data-menu="${selector}"]`;
		this.isOpen = false;

		this.elements = {};
		this.elements.menu = document.querySelector(this.menuSelector);

		if (!this.elements.menu) return;

		this.elements.icon = document.querySelector(`[data-menu-icon="${selector}"]`);
		this.elements.container = document.querySelector(`[data-menu-container="${selector}"]`);
		this.elements.items = this.elements.menu.querySelectorAll('[data-menu-item]');
		this.elements.controls = this.elements.menu.querySelectorAll('[data-menu-control]');
		this.elements.submenus = this.elements.menu.querySelectorAll('[data-menu-submenu]');
		this.elements.close = this.elements.menu.querySelector('[data-menu-close]');
		this.elements.backControls = this.elements.menu.querySelectorAll('[data-menu-back]');

		this.itemsActions();
		this.controlsActions();
		this.iconActions();
		this.backsActions();
		this.closeActions();
		this.outsideActions();
		this.insideActions();
		
		this.init();
	}


	init() {
		const isMenuOpen = this.options.isOpen;

		if (isMenuOpen) this.openMenu();

		this.elements.submenus.forEach(submenu => this.setSubemenuOpenSideClass(submenu));
	}

	
	itemsActions() {
		const onItemMouseenterAction = (item) => {
			if (this.isTouchScreen()) return;
			if (this.isLastLevel(item)) return;

			item.querySelector('[data-menu-control]').classList.add(this.classes.hover);
			item.querySelector('[data-menu-submenu]').classList.add(this.classes.visible);
		};

		const onItemMouseleaveAction = (item) => {
			if (this.isTouchScreen()) return;
			if (this.isLastLevel(item)) return;
			
			item.querySelector('[data-menu-control]').classList.remove(this.classes.hover);
			item.querySelector('[data-menu-submenu]').classList.remove(this.classes.visible);
		};
		
		this.elements.items.forEach(item => {
			item.addEventListener('mouseenter', () => onItemMouseenterAction(item));
			item.addEventListener('mouseleave', () => onItemMouseleaveAction(item));
		});
	}


	controlsActions() {
		const onControlClick = (control) => {
			if (!this.isTouchScreen()) return;

			const item = control.closest('[data-menu-item]');

			this.isItemActive(item) ? this.closeItem(item) : this.openItem(item);
		};

		this.elements.controls.forEach(control => {
			control.addEventListener('click', () => onControlClick(control))
		});
	}


	iconActions() {
		if (!this.elements.icon) return;

		const onIconClick = () => {
			this.isMenuOpen() ? this.closeMenu() : this.openMenu();
		}

		this.elements.icon.addEventListener('click', () => onIconClick());
	}
	

	backsActions() {
		const onBackClick = (backControl) => {
			const menuItem = backControl.closest('[data-menu-item]');
			
			this.closeItem(menuItem);
		};

		this.elements.backControls.forEach(backControl => {
			backControl.addEventListener('click', () => onBackClick(backControl));
		});
	}


	closeActions() {
		if (!this.elements.close) return;

		this.elements.close.addEventListener('click', () => this.closeMenu.call(this));
	}


	outsideActions() {
		const onOutsideClick = (event) => {
			const isCloseOnOutside = this.options.closeOnOutside;
			if (!isCloseOnOutside) return;

			const target = event.target;

			const isTargetOfMenuElement = this.isMenuElement(target);
			if (isTargetOfMenuElement) return;

			this.closeMenu();
			this.closeItems();
		};

		document.addEventListener('click', onOutsideClick);
	}


	insideActions() {
		const onContainerClick = (event) => {
			const target = event.target;

			const isTargetMenuItem = this.isMenuItem(target);
			if (!isTargetMenuItem) return;
			
			const isCloseOnSelect = this.options.closeOnSelect;
			if (!isCloseOnSelect) return;

			this.closeMenu();
		};

		this.elements.container.addEventListener('click', onContainerClick)
	}


	openMenu() {
		if (this.isOpen) return;

		this.elements.icon.classList.add(this.classes.active);
		this.elements.container.classList.add(this.classes.active);

		this.isOpen = true;

		const isLockOnOpen = this.options.lockOnOpen;

		if (isLockOnOpen) this.disableScroll();
	}


	closeMenu() {
		if (!this.isOpen) return;
		
		this.elements.icon.classList.remove(this.classes.active);
		this.elements.container.classList.remove(this.classes.active);

		this.isOpen = false;

		const isLockOnOpen = this.options.lockOnOpen;

		if (isLockOnOpen) this.enableScroll();
	}
	

	openItem(item) {
		const { control, submenu } = this.getItemSubElements(item);

		item.classList.add(this.classes.active);
		control.classList.add(this.classes.hover);
		submenu.classList.add(this.classes.visible);

		this.closeOtherItems(item);
	}


	closeItem(item) {
		const { controls, submenus, items } = this.getItemSubElementsAll(item);

		item.classList.remove(this.classes.active);
		items.forEach(item => item.classList.remove(this.classes.active));
		controls.forEach(control => control.classList.remove(this.classes.hover));
		submenus.forEach(submenu => submenu.classList.remove(this.classes.visible));
	}


	closeItems() {
		const rootItems = this.getRootItems();

		rootItems.forEach(item => this.closeItem(item));
	}


	closeOtherItems(item) {
		const rootItem = this.getRootItem(item);
		const rootItems = this.getRootItems();

		rootItems.forEach(item => {
			if (!item.isSameNode(rootItem)) this.closeItem(item);
		});
	}


	getRootItem(item) {
		const parentItem = item.parentElement.closest('[data-menu-item]');

		if (!parentItem) return item;

		return this.getRootItem(parentItem);
	}


	getRootItems() {
		return Object.values(this.elements.items).filter(item => {
			return !item.parentElement.closest('[data-menu-item]');
		});
	}

	
	getItemSubElements(item) {
		const control = item.querySelector('[data-menu-control]');
		const submenu = item.querySelector('[data-menu-submenu]');

		return { control, submenu };
	}
	

	getItemSubElementsAll(item) {
		const controls = item.querySelectorAll('[data-menu-control]');
		const submenus = item.querySelectorAll('[data-menu-submenu]');
		const items = item.querySelectorAll('[data-menu-item]');

		return { controls, submenus, items };
	}


	disableScroll() {
		this.lock();
		document.body.classList.add(this.classes.lock);
	}


	enableScroll() {
		this.unlock();
		document.body.classList.remove(this.classes.lock);
	}


	lock() {
		const fixBlocks = document.querySelectorAll(`[data-fix]`);
		const fixBlocksM = document.querySelectorAll(`[data-fix-m]`);
		const offset = window.innerWidth - document.body.offsetWidth + 'px';
		fixBlocks.forEach((el) => {
			el.style.paddingRight = offset;
		});
		fixBlocksM.forEach((el) => {
			el.style.marginRight = offset;
		});
		document.body.style.paddingRight = offset;
	}

	
	unlock() {
		const fixBlocks = document.querySelectorAll(`[data-fix]`);
		const fixBlocksM = document.querySelectorAll(`[data-fix-m]`);
		fixBlocks.forEach((el) => {
			el.style.paddingRight = '0px';
		});
		fixBlocksM.forEach((el) => {
			el.style.marginRight = '0px';
		});
		document.body.style.paddingRight = '0px';
	}


	isItemActive(item) {
		return item.classList.contains(this.classes.active) ? true : false;
	}


	isMenuElement(target) {
		const icon = target.closest('[data-menu-icon]');
		const container = target.closest('[data-menu-container]');
		
		if (icon?.isSameNode(this.elements.icon)) return true;
		if (container?.isSameNode(this.elements.container)) return true;

		return false;
	}


	isMenuItem(target) {
		const item = target.closest('[data-menu-item]');

		return item ? true : false;
	}


	isMenuOpen() {
		return this.isOpen;
	}


	isLastLevel(item) {
		const control = item.querySelector('[data-menu-control]');
		const submenu = item.querySelector('[data-menu-submenu]');

		return (control && submenu) ? false : true;
	}
	

	isTouchScreen() {
		return (window.matchMedia("(pointer: coarse)").matches) ? true : false;
	}


	setSubemenuOpenSideClass(submenu) {
		if (this.isElementOutsideToRight(submenu)) {
			submenu.classList.add(this.classes.toleft);
		} else {
			submenu.classList.add(this.classes.toright);
		}
	}


	isElementOutsideToRight(element) {
		const elementRectangle = element.getBoundingClientRect();
		
		return elementRectangle.right >= document.documentElement.clientWidth ? true : false;
	}

}