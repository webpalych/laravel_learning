<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        Post::create([
            'title' => 'First post',
            'slug' => 'first-post',
            'content' => '<p>Veniam molestias quaerat. dolores nihil dolorum eligendi omnis Quisquam molestiae consequatur et Laborum possimus provident <a title="Ipsum nihil." href="http://rowe.com/totam-nisi-eos-voluptatem-reiciendis-totam">temporibus omnis</a> accusantium. Dolorem in a harum Voluptatem doloremque beatae voluptates hic non perspiciatis Qui in voluptatibus illum. Eveniet eos sapiente qui ea saepe architecto. in dolores expedita nobis. Exercitationem nulla inventore atque sit ab. Sequi quasi rerum et placeat ut Architecto possimus esse ea ea est. Qui magni blanditiis doloribus dicta quis. <a title="Est." href="http://walsh.com/autem-ipsum-explicabo-reprehenderit-hic-eligendi.html">esse saepe molestiae quia reprehenderit magnam</a> Eum ullam non dolorum omnis deleniti. Eum minus odio et vel Sit optio velit quidem tempora. Omnis molestiae consequatur qui magni ducimus nam. Voluptate nihil amet harum nesciunt. Exercitationem iure omnis voluptatem. Autem non aliquid rerum voluptatem laborum quia. Veritatis aspernatur ducimus voluptatem rerum. unde molestiae autem esse sapiente. Est voluptas asperiores molestiae</p>
                                <ul>
                                <li>Qui quasi</li>
                                <li>Quisquam ut autem</li>
                                <li>Qui labore nam sapiente</li>
                                <li>Voluptatem consequatur</li>
                                <li>Consequuntur cum</li>
                                <li>Enim et quia quas rerum</li>
                                </ul>
                                <p>Esse cupiditate ut modi nisi culpa maiores Similique modi qui ipsam non dolorem. Quam omnis atque blanditiis <a title="Harum ea dolore quaerat omnis aut." href="http://parisian.com/possimus-sit-qui-eos-doloribus">et. Cupiditate id</a> rem enim. Autem qui rerum. Rerum vitae praesentium <a title="Fugit facere aut." href="http://halvorson.com/rerum-quo-voluptatem-sed-reiciendis">molestiae eaque sint molestias. Hic</a> molestiae unde et. consequatur eveniet nesciunt facere consequatur. Rerum ea eius animi et Voluptatum explicabo cupiditate maiores commodi cupiditate saepe et. Rerum maxime sunt et.</p>
                                <p>Dolores atque molestiae corporis corporis et a. Facere temporibus facilis et dicta dolorem et. Ut explicabo sequi fugit blanditiis doloremque et. Veniam et nemo quae occaecati voluptas Impedit rerum quod aspernatur maxime ut. Qui nostrum neque Et suscipit id molestias non et Non fugit officia quibusdam Nemo ea et qui. <a title="Facere in rem temporibus ea ut." href="http://www.sauer.info/quidem-totam-aut-neque-ut-sequi">totam</a> adipisci officia. quisquam laboriosam doloribus atque omnis velit ullam. Dignissimos quia aliquam ipsum nesciunt labore. Perferendis rem reprehenderit quia. Sapiente et eum exercitationem explicabo suscipit <a title="Culpa beatae modi non exercitationem." href="https://www.armstrong.com/qui-suscipit-ut-ut-velit-dolorem">Nihil accusantium aliquid</a> soluta quae fugiat assumenda Quod est molestiae dignissimos eligendi rem distinctio. Excepturi nemo debitis quia. Laudantium similique quibusdam est possimus unde unde. Quaerat et vel esse ipsam Iure tenetur quo cum deserunt. Nostrum dolores iste quo sit sit et. Tempora assumenda veniam exercitationem ducimus eveniet ut. Vel voluptatem corrupti iusto labore. Deserunt <a title="A." href="http://www.romaguera.net/iusto-ut-amet-sit-tempora-corrupti-labore-libero">quibusdam delectus</a> ipsa distinctio quisquam. Odit nihil sit consequatur. Quis sint sed praesentium beatae. Laboriosam omnis molestiae alias fugit sit. Qui nisi quod non. Optio autem laboriosam officiis. Dignissimos officiis sapiente molestiae <a title="Et dolore omnis dolores qui." href="http://www.brakus.org/dolore-quaerat-quasi-non-sint-dolorem-est-doloribus">culpa</a> officia. Accusantium consequatur odio ad id. Quia omnis sed ipsum perferendis voluptatibus. Ipsam iusto nisi. quo animi dolores aut et.</p>
                ',
            'excerpt' => 'краткое содержание первой записи',
            'img' => 'img/pic1.jpg',
            'published' => '0',
            'published_at' => DB::raw('CURRENT_TIMESTAMP + INTERVAL 5 DAY')

        ]);

        Post::create([
            'title' => 'Second post',
            'slug' => 'second-post',
            'content' => '<p>Tempora ab velit reiciendis aut rerum. Rerum quo nemo quibusdam ut. Illo voluptatibus autem dolores. Saepe vero dolorum ipsam odit in iusto. Id consequatur laborum cumque non dolorum. Dolorum et iure id. Id odio est soluta natus <a title="Et." href="http://www.jenkins.org/">magnam et.</a> adipisci eum recusandae assumenda corrupti sed dolorem. Sed praesentium omnis omnis aut Dolorem quia porro eveniet atque. velit atque aut et quam. Vero numquam quia rerum excepturi. Occaecati iusto eum molestiae. <a title="Dolore sequi corporis modi sit." href="http://www.nienow.com/occaecati-neque-officia-fugiat-odio-ex">ab id officia</a> aliquam nihil ipsam aliquid. dolor id repudiandae aperiam labore. Consequatur consequuntur qui modi Optio ipsa sunt cumque praesentium. Delectus distinctio omnis Sed rerum dignissimos molestiae consectetur aliquam. Qui fugiat cumque ipsum. recusandae commodi qui. Corporis repellendus aperiam quo vero expedita. possimus qui blanditiis consectetur pariatur. reprehenderit voluptate et ut et. cupiditate <a title="Omnis voluptatem dignissimos." href="http://www.funk.biz/">ex</a> nobis omnis</p>
                                <p>Et voluptatem molestiae perspiciatis. Accusantium similique tempore quis ut enim. voluptate id fugiat. Cumque sit amet <a title="Optio autem et." href="http://runolfsdottir.com/iste-non-voluptatibus-officiis">Voluptatem repudiandae reiciendis</a> doloribus eum veritatis saepe culpa.</p>
                                <ul>
                                <li>Quo et aliquid quis itaque</li>
                                <li>Et eaque nemo et</li>
                                <li>Aliquam quasi ut officia ratione quas</li>
                                <li>Voluptas est rem ab qui tenetur non culpa</li>
                                </ul>
                                <p>Numquam corrupti incidunt eaque aut Deleniti vel quae voluptas <a title="Odio nihil." href="http://www.windler.net/omnis-deserunt-non-aliquam-et">quis</a> vel. Illum placeat doloremque placeat laudantium Consequatur ducimus illo <a title="Eum voluptatem recusandae." href="http://mohr.biz/dicta-asperiores-id-reprehenderit-qui-qui-sunt-aut.html">Delectus unde dolorem consequatur</a> perferendis optio nihil. dolores <a title="Tenetur." href="http://www.hahn.com/in-itaque-nobis-repellendus-possimus-et-ut">incidunt quaerat eveniet dolor</a> Enim ut dolorem voluptatem quod sapiente fugit. possimus dolores et doloremque suscipit. <a title="Minima officia libero cum." href="https://leannon.com/voluptas-voluptas-reprehenderit-non-corporis.html">pariatur inventore</a> facere eaque vero. Magni quaerat odio aliquid porro quia. Impedit odit culpa Hic et ut qui natus Perspiciatis in dolorem voluptatem soluta porro. Tenetur accusantium ea <a title="Quia odio mollitia." href="http://www.harris.com/velit-distinctio-itaque-quia-dignissimos">amet. Quaerat est et placeat ea</a> <a title="Id rem quibusdam aliquam quos." href="http://homenick.com/">deserunt</a> Saepe qui minima asperiores. ratione sed rerum nesciunt. Ea et enim illum quia illo esse. Veritatis id quia explicabo. <a title="Est labore maiores." href="http://www.rutherford.net/architecto-voluptatum-excepturi-quo-recusandae-qui">dolorum</a> est et delectus amet Et voluptatem rem minima numquam Fuga adipisci nam dolores. Molestias tempora itaque qui quia nobis.</p>',
            'excerpt' => 'краткое содержание второй записи',
            'img' => 'img/pic2.jpg',
            'published' => '1',
            'published_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        Post::create([
            'title' => 'Third post',
            'slug' => 'third-post',
            'content' => '<p>Numquam corrupti incidunt eaque aut Deleniti vel quae voluptas <a title="Odio nihil." href="http://www.windler.net/omnis-deserunt-non-aliquam-et">quis</a> vel. Illum placeat doloremque placeat laudantium Consequatur ducimus illo <a title="Eum voluptatem recusandae." href="http://mohr.biz/dicta-asperiores-id-reprehenderit-qui-qui-sunt-aut.html">Delectus unde dolorem consequatur</a> perferendis optio nihil. dolores <a title="Tenetur." href="http://www.hahn.com/in-itaque-nobis-repellendus-possimus-et-ut">incidunt quaerat eveniet dolor</a> Enim ut dolorem voluptatem quod sapiente fugit. possimus dolores et doloremque suscipit. <a title="Minima officia libero cum." href="https://leannon.com/voluptas-voluptas-reprehenderit-non-corporis.html">pariatur inventore</a> facere eaque vero. Magni quaerat odio aliquid porro quia. Impedit odit culpa Hic et ut qui natus Perspiciatis in dolorem voluptatem soluta porro. Tenetur accusantium ea <a title="Quia odio mollitia." href="http://www.harris.com/velit-distinctio-itaque-quia-dignissimos">amet. Quaerat est et placeat ea</a> <a title="Id rem quibusdam aliquam quos." href="http://homenick.com/">deserunt</a> Saepe qui minima asperiores. ratione sed rerum nesciunt. Ea et enim illum quia illo esse. Veritatis id quia explicabo. <a title="Est labore maiores." href="http://www.rutherford.net/architecto-voluptatum-excepturi-quo-recusandae-qui">dolorum</a> est et delectus amet Et voluptatem rem minima numquam Fuga adipisci nam dolores. Molestias tempora itaque qui quia nobis.</p>
                                <p>Tempora ab velit reiciendis aut rerum. Rerum quo nemo quibusdam ut. Illo voluptatibus autem dolores. Saepe vero dolorum ipsam odit in iusto. Id consequatur laborum cumque non dolorum. Dolorum et iure id. Id odio est soluta natus <a title="Et." href="http://www.jenkins.org/">magnam et.</a> adipisci eum recusandae assumenda corrupti sed dolorem. Sed praesentium omnis omnis aut Dolorem quia porro eveniet atque. velit atque aut et quam. Vero numquam quia rerum excepturi. Occaecati iusto eum molestiae. <a title="Dolore sequi corporis modi sit." href="http://www.nienow.com/occaecati-neque-officia-fugiat-odio-ex">ab id officia</a> aliquam nihil ipsam aliquid. dolor id repudiandae aperiam labore. Consequatur consequuntur qui modi Optio ipsa sunt cumque praesentium. Delectus distinctio omnis Sed rerum dignissimos molestiae consectetur aliquam. Qui fugiat cumque ipsum. recusandae commodi qui. Corporis repellendus aperiam quo vero expedita. possimus qui blanditiis consectetur pariatur. reprehenderit voluptate et ut et. cupiditate <a title="Omnis voluptatem dignissimos." href="http://www.funk.biz/">ex</a> nobis omnis</p>
                                <p>Et voluptatem molestiae perspiciatis. Accusantium similique tempore quis ut enim. voluptate id fugiat. Cumque sit amet <a title="Optio autem et." href="http://runolfsdottir.com/iste-non-voluptatibus-officiis">Voluptatem repudiandae reiciendis</a> doloribus eum veritatis saepe culpa.</p>
                                <ul>
                                <li>Quo et aliquid quis itaque</li>
                                <li>Et eaque nemo et</li>
                                <li>Aliquam quasi ut officia ratione quas</li>
                                <li>Voluptas est rem ab qui tenetur non culpa</li>
                                </ul>
                                ',
            'excerpt' => 'краткое содержание третьей записи',
            'img' => 'img/pic3.jpg',
            'published' => '1',
            'published_at' => DB::raw('CURRENT_TIMESTAMP - INTERVAL 2 DAY')
        ]);
    }
}
