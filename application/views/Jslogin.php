<script type="text/javascript">
$(document).ready(function() {
    login();


}).end();

function login() {

    $("#btnLogin").click(function(e) {
        e.preventDefault();
        if (validarFormulario("formLogin")) {

            var valUserName = $("#inputusername").val();
            var valUserPass = $("#inputpass").val();
            //alert("user: "+ valUserName +" pass: "+valUserPass)
            var url = $("#btnLogin").attr("data_url");
            

            $.post(url,{
                user: valUserName,
                pass: valUserPass
            }).done(function(response){
                response = JSON.parse(response);
                console.log(response)
                if(response.status == true){
                    //usuario logeado
                    window.location.replace(response.url)

                }else{

                alert(response.msg)
                }
            })

        }
        /*
        if(valUserName !=''  && valUserPass != ''){
            alert("campos completos");

        }else{
            alert("campos vacios")
        }
        */


    })


}

function validarFormulario(idform) {
    var form = document.getElementById(idform);
    if (form.checkValidity()) {

        return true;
    } else {
        form.reportValidity();
    }
}
</script>