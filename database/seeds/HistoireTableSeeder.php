<?php

use Illuminate\Database\Seeder;

class HistoireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histoire')->insert([
            'titre_histoire' => 'Histoire',
            'titre_realisation' => 'Réalisations',
            'titre_service' => 'Services',
            'titre_produit' => 'Produits',
            'img_url_guy' => 'guy.jpg',
            'img_url_denise' => 'denise.jpg',
            'description_histoire' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec leo id nisi pharetra mollis. Nulla elementum ornare est, ut accumsan diam aliquam vel. Ut tempor, nisi a rhoncus efficitur, elit odio elementum quam, sed auctor odio massa nec sapien. In tincidunt leo nec leo gravida, id condimentum sem finibus. Maecenas et justo tortor. Suspendisse vestibulum magna nec enim accumsan fermentum. Nam fermentum ligula sit amet tortor tincidunt, non congue urna egestas. Quisque malesuada sed neque vitae sodales. Maecenas ac ligula enim. Suspendisse justo dolor, cursus eu quam in, porttitor sollicitudin velit. In laoreet turpis fermentum diam suscipit, ac accumsan turpis condimentum. Donec vehicula finibus turpis, vel consectetur libero auctor nec. Pellentesque nec ligula non arcu sagittis lobortis.',
            'description_guy' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec leo id nisi pharetra mollis. Nulla elementum ornare est, ut accumsan diam aliquam vel. Ut tempor, nisi a rhoncus efficitur, elit odio elementum quam, sed auctor odio massa nec sapien. In tincidunt leo nec leo gravida, id condimentum sem finibus. Maecenas et justo tortor. Suspendisse vestibulum magna nec enim accumsan fermentum. Nam fermentum ligula sit amet tortor tincidunt, non congue urna egestas. Quisque malesuada sed neque vitae sodales. Maecenas ac ligula enim. Suspendisse justo dolor, cursus eu quam in, porttitor sollicitudin velit. In laoreet turpis fermentum diam suscipit, ac accumsan turpis condimentum. Donec vehicula finibus turpis, vel consectetur libero auctor nec. Pellentesque nec ligula non arcu sagittis lobortis.',
            'description_denise' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec leo id nisi pharetra mollis. Nulla elementum ornare est, ut accumsan diam aliquam vel. Ut tempor, nisi a rhoncus efficitur, elit odio elementum quam, sed auctor odio massa nec sapien. In tincidunt leo nec leo gravida, id condimentum sem finibus. Maecenas et justo tortor. Suspendisse vestibulum magna nec enim accumsan fermentum. Nam fermentum ligula sit amet tortor tincidunt, non congue urna egestas. Quisque malesuada sed neque vitae sodales. Maecenas ac ligula enim. Suspendisse justo dolor, cursus eu quam in, porttitor sollicitudin velit. In laoreet turpis fermentum diam suscipit, ac accumsan turpis condimentum. Donec vehicula finibus turpis, vel consectetur libero auctor nec. Pellentesque nec ligula non arcu sagittis lobortis.',
            'description_service' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec leo id nisi pharetra mollis. Nulla elementum ornare est, ut accumsan diam aliquam vel. Ut tempor, nisi a rhoncus efficitur, elit odio elementum quam, sed auctor odio massa nec sapien. In tincidunt leo nec leo gravida, id condimentum sem finibus. Maecenas et justo tortor. Suspendisse vestibulum magna nec enim accumsan fermentum. Nam fermentum ligula sit amet tortor tincidunt, non congue urna egestas. Quisque malesuada sed neque vitae sodales. Maecenas ac ligula enim. Suspendisse justo dolor, cursus eu quam in, porttitor sollicitudin velit. In laoreet turpis fermentum diam suscipit, ac accumsan turpis condimentum. Donec vehicula finibus turpis, vel consectetur libero auctor nec. Pellentesque nec ligula non arcu sagittis lobortis.',
            'description_produit' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec leo id nisi pharetra mollis. Nulla elementum ornare est, ut accumsan diam aliquam vel. Ut tempor, nisi a rhoncus efficitur, elit odio elementum quam, sed auctor odio massa nec sapien. In tincidunt leo nec leo gravida, id condimentum sem finibus. Maecenas et justo tortor. Suspendisse vestibulum magna nec enim accumsan fermentum. Nam fermentum ligula sit amet tortor tincidunt, non congue urna egestas. Quisque malesuada sed neque vitae sodales. Maecenas ac ligula enim. Suspendisse justo dolor, cursus eu quam in, porttitor sollicitudin velit. In laoreet turpis fermentum diam suscipit, ac accumsan turpis condimentum. Donec vehicula finibus turpis, vel consectetur libero auctor nec. Pellentesque nec ligula non arcu sagittis lobortis.',
            'description_realisation' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec leo id nisi pharetra mollis. Nulla elementum ornare est, ut accumsan diam aliquam vel. Ut tempor, nisi a rhoncus efficitur, elit odio elementum quam, sed auctor odio massa nec sapien. In tincidunt leo nec leo gravida, id condimentum sem finibus. Maecenas et justo tortor. Suspendisse vestibulum magna nec enim accumsan fermentum. Nam fermentum ligula sit amet tortor tincidunt, non congue urna egestas. Quisque malesuada sed neque vitae sodales. Maecenas ac ligula enim. Suspendisse justo dolor, cursus eu quam in, porttitor sollicitudin velit. In laoreet turpis fermentum diam suscipit, ac accumsan turpis condimentum. Donec vehicula finibus turpis, vel consectetur libero auctor nec. Pellentesque nec ligula non arcu sagittis lobortis.',
        ]);
    }
}