SELECT
diretorios.Ficha,
diretorios.nombre,
diretorios.apeidoPaterno,
diretorios.apeidoMaterno,
diretorios.`cumpleaños`,
datostrabajadors.numExt,
estructuragerencias.claveCentroTrabajo,
estructuragerencias.gerencia,
guardiaprogramas.programaGuardia,
guardiaprogramas.Comentario,
rolguardias.rolGuardia
FROM
diretorios
INNER JOIN datostrabajadors ON datostrabajadors.diretorio_id = diretorios.id
INNER JOIN estructuragerencias ON diretorios.estructuragerencia_id = estructuragerencias.id
INNER JOIN guardiaprogramas ON guardiaprogramas.diretorio_id = diretorios.id
INNER JOIN rolguardias ON guardiaprogramas.rol_id = rolguardias.id
