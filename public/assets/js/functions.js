/*
 * Funcion para verificar si el email introducido es validos
 * @param {string} email 
 * @return Boolean
 */
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}