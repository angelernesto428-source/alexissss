#LISTA DE COMPRAS 5 JAJA XD

lista_compras = []
for i in range (5):
     articulo=input(f"ingrese el articulo {i +1}:")
     lista_compras.append(articulo)
     
print("\nLista inicial:) " , lista_compras)

if len (lista_compras)>1:
    eliminado=lista_compras.pop(1)
    print(f"se elimino el segundo articulo:{eliminado}")
    
print("lista despues de eliminar el segundo articulo:",lista_compras)