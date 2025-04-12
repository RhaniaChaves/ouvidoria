<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manifestacao>
 */
class ManifestacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoria = [
            0 => 'elogio',
            1 => 'reclamacao',
            2 => 'sugestao',
            3 => 'denuncia'
        ];

        $status = [
            0 => "aberta",
            1 => "encaminhada",
            2 => "concluida",
        ];

        $tipo_usuario = [
            0 => "aluno", 
            1 => "servidor", 
            2 => "visitante"
        ];

        return [
            "nome_autor" => fake()->name(),
            "codigo_rastreio" => fake()->randomNumber(),
            "data_envio" => fake()->date(),
            "categoria" => $categoria[rand(0,3)],
            "titulo" => fake()->text(20),
            "descricao" => fake()->text(100),
            "status" => $status[rand(0,2)],
            "tipo_usuario" => $tipo_usuario[rand(0, 2)]
        ];
    }
}
