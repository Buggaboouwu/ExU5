<?php
require_once 'conexion.php';

$mensaje = '';

// Obtener el ID del usuario actualmente autenticado
$usuario_id = 1; // Cambia esto por la forma en que obtienes el ID del usuario

// Verificar si se envió el formulario de actualización
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $direccion = $_POST['direccion'];
  $sexo = $_POST['sexo'];

  // Actualizar la información del usuario en la base de datos
  $stmt = $conn->prepare("UPDATE usuarios SET nombre = :nombre, apellidos = :apellidos, email = :email, fecha_nacimiento = :fecha_nacimiento, direccion = :direccion, sexo = :sexo WHERE id = :usuario_id");
  $stmt->bindParam(':nombre', $nombre);
  $stmt->bindParam(':apellidos', $apellidos);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':fecha_nacimiento', $fecha_nacimiento);
  $stmt->bindParam(':direccion', $direccion);
  $stmt->bindParam(':sexo', $sexo);
  $stmt->bindParam(':usuario_id', $usuario_id);
  $stmt->execute();

  $mensaje = "Información actualizada exitosamente.";
}

// Obtener la información actual del usuario
$stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :usuario_id");
$stmt->bindParam(':usuario_id', $usuario_id);
$stmt->execute();
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
<?php include 'head.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi perfil</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      background-color: #fce4ec;
    }
    .container {
      margin-top: 100px;
    }
  </style>
</head>
<body>
  <div class="awacontainer">
    <h1 class="text-center">Mi perfil</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="perfil.php" method="POST">
          <div class="alert alert-info <?php echo !empty($mensaje) ? 'd-block' : 'd-none'; ?>" role="alert">
            <?php echo $mensaje; ?>
          </div>
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
          </div>
          <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $usuario['apellidos']; ?>" required>
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario['email']; ?>" required>
          </div>
          <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $usuario['fecha_nacimiento']; ?>" required>
          </div>
          <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $usuario['direccion']; ?>" required>
          </div>
          <div class="form-group">
            <label for="sexo">Sexo</label>
            <select class="form-control" id="sexo" name="sexo" required>
              <option value="masculino" <?php echo $usuario['sexo'] === 'masculino' ? 'selected' : ''; ?>>Masculino</option>
              <option value="femenino" <?php echo $usuario['sexo'] === 'femenino' ? 'selected' : ''; ?>>Femenino</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Guardar cambios</button>
        </form>
      </div>
    </div>
  </div>
  
  <?php include 'foot.php'; ?>
  
</body>
</html>
