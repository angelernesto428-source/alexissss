#ENCONTRAR INDICE PUNTO PAY 13

lista = [1,2,3,4,5,6,7,8,9,10]

caracter_elegido = int(input("ponga un numero del 1 al 10:"))

if caracter_elegido in lista:
    poscision = lista.index(caracter_elegido)
    print(f"el numero {caracter_elegido} esta en la posicion numero {poscision}")

else:
    print("el numero no esta")