 <script type='text/javascript'>
    function sum() {
       var txtS1HomeGame1 = document.getElementByName('S1HomeGame1').value;
       var txtS1HomeGame2 = document.getElementByName('S2HomeGame2').value;

       var result = parseInt(txtS1HomeGame1) + parseInt(txtS1HomeGame2);
       if (!isNaN(result)) {
           document.getElementByName('S1HomeTotal').value = result;
       }
   }
   </script>
