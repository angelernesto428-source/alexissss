#VALIDADOR DE ENTRADA ERN BUCCLE 16

print("ADIVINA EL NUMERRO")

import random

numero_aleatorio = random.randint(1, 10)

paso = True

while paso:
    numero_user = float(input("pon el numemo: "))

    if numero_user == numero_aleatorio:
        print("pasate")
        paso = False

    elif numero_user != numero_aleatorio:
        print("otra vez")
    
    else:
        print("otra")


 