#5
lista_compra=[]
for i in range (5):
    articulo = input(f"ingrese el articulo{i+1}:")
    lista_compra.append(articulo)

    print("\nLista inicial:",lista_compra)
    
    if len (lista_compra)> 1:
     eliminado=lista_compra.pop(1)
     print(f"se elimino el segundo articulo:{eliminado}")
  
    
     