function Formulario1(){

           var fst=$("#isFormulario").serialize();
           alert(fst)
           $.ajax({
                    data:  fst,
                    url:   'Login_Controller/hola',
                    type:  'post',
                    dataType: 'json',
                    success: function (data) {
                        if (data.existe == true){
                            alert("Bienvenid@ "+data.hola);
                        }
                        
                        if(data.existe == false){
                            alert("No existe");
                        }
                    }
            });

}
        