<?php 

    include_once('partes/header.php');

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }     
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ea quis eveniet veritatis, numquam corrupti quibusdam accusamus cum reiciendis vel voluptas repellendus maiores. Voluptates nobis, corporis quibusdam quas maiores laboriosam.
            Odit ratione debitis non ipsum culpa iste officia vitae aliquid similique eos, odio tempore et, magni harum eligendi molestiae. Eos, iure quo soluta sunt laboriosam aut provident expedita odio debitis.
            Numquam, doloribus fugit quo vero quos voluptas neque voluptatem animi? Officiis asperiores rerum nisi excepturi nemo amet quaerat voluptatum voluptatibus autem accusantium libero dolore commodi, voluptate nobis beatae maxime incidunt!
            Iure est quisquam quod harum amet rem fuga ut odio, mollitia excepturi ratione eius maiores laudantium itaque quidem distinctio placeat doloribus provident beatae inventore unde ex quibusdam at et! Odit?
            Illo, iusto commodi pariatur consequuntur fugiat quae voluptates adipisci quod qui quaerat odit praesentium, repellat modi vel inventore ut officiis tenetur eveniet. Voluptatum aliquid harum optio, itaque aspernatur porro sapiente.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tags):?>
                    <li><a href="#"><?=$tags?></a></li>
                <?php endforeach;?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category):?>
                    <li><a href="#"><?=$category?></a></li>
                <?php endforeach;?>
            </ul>
        </aside>
    </main>
    
    
<?php include_once('partes/footer.php')?>