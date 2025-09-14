#CONTADOR DE MAYUSCULAS Y MINUSCULAS

def contar_mayus_minus(texto):
    if isinstance(texto, str):

       minus = 0

       mayus = 0

    for c in texto:
        if c.isalpha():
            if c.islower():
                minus += 1
            elif c.isupper():
                mayus += 1

    return minus, mayus

    raise TypeError    
    raise typeError("El coso debe ser una cadena de texto")

frase = "PhyTon eS tRemEndO"
try:
    resultado = contar_mayus_minus(frase)
    print(f"En la frase hay {resultado[0]}  minusculas y {resultado[1]}  mayusculas")
except TypeError as e:
    print("error:", e)

