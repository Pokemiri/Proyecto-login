 const customCursor = document.getElementById('customCursor');
     function isTouch(){ return('ontouchstart' in window)||(navigator.maxTouchPoints>0)||(navigator.msMaxTouchPoints>0);}
     if (isTouch()){
        customCursor.style.display = 'none';
        document.body.style.cursor = 'auto';
        } else {
            document.addEventListener('mousemove', e => {
                customCursor.style.display = 'block';
                customCursor.style.left = e.clientX + 'px';
                customCursor.style.top = e.clientY + 'px';
            });
            document.addEventListener('mouseenter', () => customCursor.style.display = 'block');
            document.addEventListener('mouseleave', () => customCursor.style.display = 'none');
     }