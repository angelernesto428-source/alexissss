#ADIVINA ELLNUMERO 8

import random

numero_secret = random.randint(1,50)

while True:
    sipe = int(input("adivina un numero entre 1 y 50: "))

    try:
        sipe2 = int(sipe)
    except ValueError:
        print("por favor ingrese un numero valido")
        continue

    if sipe < numero_secret:
        print("demasiado bajo")

    elif sipe > numero_secret:
        print("demasiado alto")

    else:
        print("GANADOR,vamos a felicitarte")
        break