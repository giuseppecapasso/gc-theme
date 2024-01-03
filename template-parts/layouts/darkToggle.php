<button id="theme-toggle" type="button" class="hidden lg:inline-flex" >
  <svg id="iconLight" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5 fill-gray-300 hover:fill-white hidden">
    <rect x="15" y="2" width="2" height="5"/>
    <rect x="21.6675" y="6.8536" width="4.958" height="1.9998" transform="translate(1.5191 19.3744) rotate(-45)"/>
    <rect x="25" y="15" width="5" height="2"/>
    <rect x="23.1466" y="21.6675" width="1.9998" height="4.958" transform="translate(-10.0018 24.1465) rotate(-45)"/>
    <rect x="15" y="25" width="2" height="5"/>
    <rect x="5.3745" y="23.1466" width="4.958" height="1.9998" transform="translate(-14.7739 12.6256) rotate(-45)"/>
    <rect x="2" y="15" width="5" height="2"/>
    <rect x="6.8536" y="5.3745" width="1.9998" height="4.958" transform="translate(-3.253 7.8535) rotate(-45)"/>
    <path d="M16,12a4,4,0,1,1-4,4,4.0045,4.0045,0,0,1,4-4m0-2a6,6,0,1,0,6,6,6,6,0,0,0-6-6Z"/>
  </svg>

  <svg id="iconDark" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="w-5 fill-gray-300 hover:fill-gray-900 hidden">
    <path d="M27,18a.9986.9986,0,0,1-.5415-.1594L22,14.9688l-4.4585,2.8718a1,1,0,0,1-1.5088-1.095l1.35-5.1318L14.3105,8.69a1,1,0,0,1,.5508-1.7146l4.3745-.6128,1.8663-3.8032A1.0008,1.0008,0,0,1,21.9878,2a1.0171,1.0171,0,0,1,.8989.5378L24.88,6.3625l4.2622.6133A1,1,0,0,1,29.69,8.69l-3.0723,2.9239,1.35,5.1318A1,1,0,0,1,27,18Zm-5-5.2207a.999.999,0,0,1,.5415.1594l2.8369,1.8272-.8457-3.2149a1.0006,1.0006,0,0,1,.2778-.9787l2.0074-1.91-2.73-.3929a.9994.9994,0,0,1-.7441-.5275L22.0269,5.2151,20.7979,7.72a1.0008,1.0008,0,0,1-.7593.55L17.19,8.6687l2,1.9036a1.0006,1.0006,0,0,1,.2778.9787l-.8457,3.2149,2.8369-1.8272A.999.999,0,0,1,22,12.7793Z"/>
    <path d="M15.8169,30A13.8137,13.8137,0,0,1,9.0752,4.1277a1,1,0,0,1,1.3613,1.3611A11.8091,11.8091,0,0,0,26.5107,21.5635a1,1,0,0,1,1.3619,1.3611A13.8411,13.8411,0,0,1,15.8169,30ZM7.3271,7.9727a11.81,11.81,0,0,0,16.7,16.7,13.8086,13.8086,0,0,1-16.7-16.7Z"/>
  </svg>
</button>

<script>
    if(!('color-theme' in localStorage)){
      if(window.matchMedia('(prefers-color-scheme: dark)').matches) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
        document.getElementById('iconDark').classList.remove('hidden');
      } else {
        localStorage.setItem('color-theme', 'light');
        document.getElementById('iconLight').classList.remove('hidden');
      }
    } else{
      if (localStorage.getItem('color-theme') === 'light') {
        localStorage.setItem('color-theme', 'light');
        document.getElementById('iconDark').classList.remove('hidden');
      } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
        document.getElementById('iconLight').classList.remove('hidden');
      }
    }

    function themeToggle() {
        if (localStorage.getItem('color-theme') === 'light') {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
          document.getElementById('iconLight').classList.remove('hidden');
          document.getElementById('iconDark').classList.add('hidden');
        } else {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
          document.getElementById('iconDark').classList.remove('hidden');
          document.getElementById('iconLight').classList.add('hidden');
        }
    }
    document.getElementById('theme-toggle').addEventListener('click', themeToggle);
</script>