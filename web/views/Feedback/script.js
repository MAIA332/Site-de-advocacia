
var inputs = $('[type="checkbox"]'); // mantem apenas um checkbox selecionado
inputs.on('click', function() { 
    inputs.get().forEach(function(el) { 
        el.checked = el == this && this.checked; 
    }, this);
});

function redirect(){
    window.location.href = "#"; // função necessaria para o redirecionamento pós tela splash
}

function enviar(){
    var nome = document.getElementById("name").value;
    var msg = document.getElementById("msg").value;

    if(nome == '' || msg == ''){
            alert("Preencha todos os campos");
    }
    else{
        its_v_check();
    }
}

function verificar_check() {
    return [].filter.call(inputs, function (input) {
        return input.checked;
    }).length;
}

function its_v_check() {
    var valido = verificar_check();
    if (!valido) {alert('Falta escolher uma checkbox!'); window.location.href="index.php";}
    else window.location="splash.html";
};