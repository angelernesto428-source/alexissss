// ejercico de losta de compras de javascript(espero que se escriba asi) 
// de compras en una farmacia para ser mas original

console.log("Tienda online de FARMATODO");



// para almacenar los datos de los productos
const carrito = [];


 
 
function farmatodoOnline() {
    let continuar = true;
    let opcion;

    alert("¡Bienvenido al farmatodito online(nose como poner el otro signo dd exlamacion)");

    while (continuar) {
        
        opcion = prompt(
            "Seleccione una opción:\n" +
            "1. AGREGAR producto \n" +
            "2. MOSTRAR productos \n" +
            "3. ELIMINAR producto \n" +
            "4. CALCULAR total \n" +
            "5. SALIR del sistema "
        );

        
        const opcionNormial = opcion ? opcion.toLowerCase().trim() : '';

        switch (opcionNormial) {
            case '1':
            case 'agregar':
                agregarProducto();
                break;
            case '2':
            case 'mostrar':
                mostrarProductos();
                break;
            case '3':
            case 'eliminar':
                eliminarProducto();
                break;
            case '4':
            case 'calcular':
                calcularTotal();
                break;
            case '5':
            case 'salir':
                alert("Gracias por usar el sistema. acuerdese de el");
                continuar = false;
                break;
            default:
                alert("Opción invalida. Por favor, ingrese un número del 1 al 5 o el nombre de la opción");
        }
    }
}


function agregarProducto() {
    const nombre = prompt("Ingrese el nombre del producto:");
    
    
    if (!nombre) {
        alert("El nombre del producto esta vacío");
        return;
    }

    let precioStr = prompt(`Ingrese el precio de ${nombre}:`);
    let precio = parseFloat(precioStr);
    
    
    if (isNaN(precio) || precio <= 0) {
        alert("Precio no válido. Por favor, ingrese un número positivo");
        return;
    }

    
    carrito.push({ nombre: nombre, precio: precio });
    alert(`"${nombre}" por $${precio.toFixed(2)} ha sido agregado al carrito`);
}


function mostrarProductos() {
    if (carrito.length === 0) {
        alert("El carrito está vacío");
        return;
    }

    let lista = "Productos en tu Carrito \n\n";
    
    carrito.forEach((producto, index) => {
        //gracias ia por lo que no supe hacer
        lista += `${index + 1}. ${producto.nombre} - $${producto.precio.toFixed(2)}\n`;
    });

    alert(lista);
}


function eliminarProducto() {
    if (carrito.length === 0) {
        alert("El carrito está vacío. No hay nada que eliminar");
        return;
    }

   
    let lista = " Productos para Eliminar \n\n";
    carrito.forEach((producto, index) => {
        lista += `${index + 1}. ${producto.nombre} - $${producto.precio.toFixed(2)}\n`;
    });
    
    let indiceStr = prompt(lista + "\nIngrese el NÚMERO del producto que desea eliminar:");
    let indice = parseInt(indiceStr);

    
    if (isNaN(indice) || indice < 1 || indice > carrito.length) {
        alert("Número de producto no válido. Intente de nuevo");
        return;
    }

    
    const productoEliminado = carrito.splice(indice - 1, 1)[0]; 
    alert(`"${productoEliminado.nombre}" ha sido eliminado del carrito`);
}


 
function calcularTotal() {
    if (carrito.length === 0) {
        alert("El carrito está vacío. El total a pagar es $0.00");
        return;
    }

    
    const total = carrito.reduce((acumulador, producto) => {
        return acumulador + producto.precio;
    }, 0); 

    alert(`Total a Pagar \n\nEl total de su compra es: $${total.toFixed(2)}`);
}


farmatodoOnline();