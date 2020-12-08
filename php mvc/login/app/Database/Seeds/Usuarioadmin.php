<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarioadmin extends Seeder
{
	public function run()
	{
		$nombre = "SAUL";
		$ape_pat ="AVILA";
		$correo = "saulsalvadorac@gmail.com";
		$usuario = "Admin";
		$password = password_hash("12345", PASSWORD_DEFAULT);

		$data = [
						'nombre' => $nombre,
						'apellido_paterno' => $ape_pat,
						'email' => $correo,
                        'usuario' => $usuario,
                        'password'  => $password
                ];

                // Using Query Builder
        $this->db->table('t_usuarios')->insert($data);
	}
}
