(function () {
    const switchButton = document.getElementById('js-switch-button');
    const isDark = window.matchMedia('(prefers-color-scheme: dark)');
    const htmlElement = document.documentElement;
    const keyLocalStorage = 'theme';
    const localTheme = sessionStorage.getItem(keyLocalStorage);
  
    if (localTheme) { // サイト側の設定が優先
      changeMode(localTheme);
    } else if (isDark.matches) { // OSがダークモードだったら
      changeMode('dark');
    }
  
    switchButton.addEventListener('change', () => { // スイッチが押されたとき
      if (switchButton.checked) {
        changeMode('dark', 'set');
      } else {
        changeMode('light', 'set');
      }
    });
  
    function changeMode(mode, storage) {
      if (mode === 'dark') {
        htmlElement.dataset.mode = mode;
        switchButton.checked = true;
  
      } else if (mode === 'light') {
        delete htmlElement.dataset.mode;
        switchButton.checked = false;
      }
  
      if (storage === 'set') {
        sessionStorage.setItem(keyLocalStorage, mode);
  
      } else if (storage === 'remove') {
        sessionStorage.removeItem(keyLocalStorage);
      }
    }
}());