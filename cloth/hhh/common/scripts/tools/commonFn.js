// 节流
const throttle = (func, wait) => {
  let timeout = null;
  return () => {
    if(!!timeout) return;
    timeout = setTimeout(() => {
      func();
      timeout = null;
    }, wait);
  }
}

// 防抖
const debounce = (func, wait) => {
  let timeout = null;
  return () => {
    if(timeout) clearTimeout(timeout);
    timeout = setTimeout(() => {
      func();
    }, wait);
  }
}
