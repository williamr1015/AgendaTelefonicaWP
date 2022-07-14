console.log('Hola Mundo');
let $EndpointContact = 0;
const handleclick = (id) => {
    console.log('Click' + id);
    $EndpointContact = id;
    location.assign("http://localhost/PruebaBRMWilliamR/detalle-contacto.php?id="+$EndpointContact);
    return $EndpointContact;
}
