
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

// 轮播图类
class XCIndexSlide {
  constructor() {
    this.xcIndexSlideDOM = document.querySelector('#xc-index-slide');
    this.slideImgDoms = document.querySelectorAll('.carousel-item>img');
  }

  // 收起轮播图
  onPackUp() {
    Object.values(this.slideImgDoms).forEach((item) => {
      item.classList.add('pack-up');
    });
  }

  // 展开轮播图
  onUnfold() {
    Object.values(this.slideImgDoms).forEach((item) => {
      item.classList.remove('pack-up');
    });
  }

  onWindowScroll(scrollTop) {
    if(MQMap.get(768).matches) {
      if (scrollTop > 500) {
        this.onPackUp();
      } else if(scrollTop === 0) {
        this.onUnfold();
      }
    }
   
  }

  init() {

  }
}

// 创建对象
const xcIndexNavbar = new XCIndexNavbar();
const xcIndexSlide = new XCIndexSlide();

xcIndexNavbar.init();
xcIndexSlide.init();


window.addEventListener('load', () => {
  const scrollTop = Math.floor(document.documentElement.scrollTop);
  xcIndexNavbar.onWindowScroll(scrollTop);
  xcIndexSlide.onWindowScroll(scrollTop);
});

window.addEventListener('scroll', throttle(() => {
  const scrollTop = Math.floor(document.documentElement.scrollTop);
  xcIndexNavbar.onWindowScroll(scrollTop);
  xcIndexSlide.onWindowScroll(scrollTop);
}, 500));

