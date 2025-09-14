#10 COMBINADOR DE DICCIONARIOS

diccionario1 = {
  "nombre": "angel",
  "edad": 17,
  "ciudad": "bogota",
}

diccionario2 = {
  "edad": 18,
  "numero": 1273637283
}

diccionario1.update(diccionario2)

print(diccionario1)