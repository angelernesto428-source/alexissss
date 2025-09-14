#PALABRA MAS LARGA  EN UNA ORACION 18

palabra = input("pon una frase cualquiera: ")

palabras = palabra.split()

mas_larga = max(palabras, key=len)

print(f"la palabra mas larga es: {mas_larga}")
