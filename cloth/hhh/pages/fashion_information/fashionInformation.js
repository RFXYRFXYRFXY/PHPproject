
// 顶部导航类
class XCIndexNavbar {
  constructor() {
    this.xcIndexNavbarDOM = document.querySelector('#xc-index-navbar');
  }

  // 收起导航栏
  onPackUp() {
    this.xcIndexNavbarDOM.classList.remove('pt-md-5');
  }

  // 展开导航栏
  onUnfold() {
    this.xcIndexNavbarDOM.classList.add('pt-md-5');
  }

  onWindowScroll(scrollTop) {
    if (scrollTop > 500) {
      this.onPackUp();
    } else if(scrollTop === 0) {
      this.onUnfold();
    }
  }

  init() {

  }
}

// 创建对象
const xcIndexNavbar = new XCIndexNavbar();

xcIndexNavbar.init();

window.addEventListener('load', () => {
  const scrollTop = Math.floor(document.documentElement.scrollTop);
  xcIndexNavbar.onWindowScroll(scrollTop);
});

window.addEventListener('scroll', throttle(() => {
  const scrollTop = Math.floor(document.documentElement.scrollTop);
  xcIndexNavbar.onWindowScroll(scrollTop);
}, 500));