#coas de clasificacion
#indivual angel gomez lo otro es con ana rubio esto es mio

registros_estudiantes = [
    ('Juan Pénez', 'Matemáticas', 85, 92),
    ('María Lopez', 'Historia', 65, 88),
    ('Carlos Garcia', 'Ciencias', 96, 99),
    ('Ana Torres', 'Literatura', 92, 75), 
    ('Pedro Ramirez', 'Arte', 70, 81),
    ('Sofia Mendoza', 'Química', 98, 97)
]


aprobados = []
reprobados = []
cuadro_de_honor = []


for estudiante in registros_estudiantes:
    nombre, materia, calificacion, asistencia = estudiante

  
    if asistencia < 80:
        reprobados.append(nombre)
    
    elif calificacion < 70:
        reprobados.append(nombre)
   
    elif calificacion >= 95:
        cuadro_de_honor.append(nombre)
        aprobados.append(nombre)
    
    else:
        aprobados.append(nombre)


print("--- Reporte de Clasificación Académica ---")
print(f" Aprobados: {aprobados}")
print(f" Reprobados: {reprobados}")
print(f"Cuadro de Honor: {cuadro_de_honor}")

