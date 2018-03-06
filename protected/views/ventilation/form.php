<!--HTML элемент, который будет иметь маску ввода телефонного номера  -->
пример 1 <input  id="phone" type="text">
<!-- Подключение библиотеки jQuery -->
<script src="/assets_cvl/js/jquery.js"></script>
<!-- Подключение jQuery плагина Masked Input -->
<script src="assets_cvl/js/jquery.maskedinput.min.js"></script>
<script>
    //Код jQuery, установливающий маску для ввода телефона элементу input
    //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
    $(function(){
        //2. Получить элемент, к которому необходимо добавить маску
        $("#phone").mask("8(999) 999-9999");
    });
</script>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>


<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close_zv")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>