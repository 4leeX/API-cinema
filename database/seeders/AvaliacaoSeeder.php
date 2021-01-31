<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvaliacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTimestamp = Carbon::now(); 

        DB::table('avaliacao')->insert([
            "name_author" =>  "Raimundo Abreu", //->NOME DO Usuario QUE FEZ A CRITICA
            "movie" => "Harry Potter e a Pedra Filosofal",
            "description" => "Marca com certeza um grande início de uma série bem consagrada. -É bom ver o começo,até mesmo do elenco,assim podemos acompanhar seus progressos. -Ótimo começo,pra uma verdadeira saga.",
            "note" => "4.6",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        DB::table('avaliacao')->insert([
            "name_author" =>  "João Pedro",
            "movie" => "Harry Potter e a Câmara Secreta",
            "description" => "Segundo filme tem trama que consegue entreter,a turma tem que descobrir a Câmara Secreta e impedir que alunos morram e que a escola seja fechada,o desfecho dentro da câmara tem uma boa dose de ação e suspense.",
            "note" => "4.5",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        DB::table('avaliacao')->insert([
            "name_author" =>  "Clara Martins",
            "movie" => "Harry Potter e o Prisioneiro de Azkaban",
            "description" => "Com Alfonso Cuarón,assumindo a direção,esse novo filme da série Harry Potter,conseguiu se manter nos bons padrões com uma perfeita continuação,de onde o seu antecessor parou a históón ainda mantém uma ótima fotografia meio que escura,mas que dá um charme a mas na história envolvente. O bom na franquia,é que podemos acompanhar histórias bem divertidas,é também poder presenciar o crescimento do elenco,nas atuações e na idade.",
            "note" => "4.6",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        DB::table('avaliacao')->insert([
            "name_author" =>  "Alexsandro Ricardo",
            "movie" => "Harry Potter e o Calice de Fogo",
            "description" => "Um tanto quanto decepcionante se comparado com o capítulo anterior, a obra-prima O Prisioneiro de Azkaban. Mas, ainda sim, Cálice de Fogo é uma aventura infanto-juvenil bem satisfatória que mantém o padrão geral de qualidade da saga Harry Potter.",
            "note" => "4.6",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        DB::table('avaliacao')->insert([
            "name_author" =>  "Rian Souza",
            "movie" => "Harry Potter e a Ordem da Fenix",
            "description" => "Cada dia a saga evoluí, o quinto filme da saga Potter se tornou mais envolvente, mais tenso. David Yates transformou o filme em uma aventura cheia de mistérios, mais não deixou o lado Sombrio de lado. A Batalha entre Voldmort e Dumbledore e curta mais épica!",
            "note" => "4.3",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        DB::table('avaliacao')->insert([
            "name_author" =>  "Manuela Pereira",
            "movie" => "Harry Potter e o Enigma do Principe",
            "description" => "Manteve o bom rendimento.Não precisou passar por cima de nenhum assunto,que foi mostrado nos filmes anteriores.Enigma do Príncipe passa a passo mostra o vilão que agora aparece com muito mais frequência.E sem contar as atuações,que melhoraram muito,e também conta com mais presença.",
            "note" => "4.6",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        DB::table('avaliacao')->insert([
            "name_author" =>  "Paulo Dias",
            "movie" => "Harry Potter e as Reliquias da Morte Parte 1",
            "description" => "A história chegando ao fim,e com ela a sensação de angústia e tristeza pelo o fim da série. -Não foi o melhor,nem o pior,apenas conseguiu manter o nível da série.Com certeza pra quem acompanhou desde o começo não se arrependeu em nada nesse grandes filmes.",
            "note" => "4.6",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

        DB::table('avaliacao')->insert([
            "name_author" =>  "Ezaau Melo",
            "movie" => "Harry Potter e as Reliquias da Morte Parte 2",
            "description" => "Final quase perfeito, a unica ressalva que eu particularmente faço é que no fim do filme o Harry Potter já adulto está como uma pessoa comum, parece que não há um reconhecimento dos outros bruxos em relação aos feitos dele, não tem aquele lance de Ohhh, é o Harry Potter. como vimos no primeiro filme, mas o desenrolar do filme em si eu achei perfeito, pena que acabou.",
            "note" => "4.7",
            'created_at' => $currentTimestamp,
            'updated_at' => $currentTimestamp,
        ]);

    }
}
