@if(session('success'))
    <div id="successMessage" class="bg-green-200 rounded-lg fixed right-0 top-40 w-52 h-10 z-10 text-green-800 font-bold text-md flex items-center justify-center">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function(){
            var element = document.getElementById('successMessage');
            if(element){
                element.remove();
            }
        }, 2000);
    </script>
@endif