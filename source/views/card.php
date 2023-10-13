<div>
    <figure class="album">
        <?php
            echo "<img src='" . $single['img'] . "'>";
        ?>
    </figure>
    <p>
        <?php
        echo $single['artist'];
        echo '</br>';
        echo $single['title'];
        ?>
    </p>
    <div class="luisteren">
        <button>
            informatie
        </button>
    </div>
    <p>
        <?php 
        echo $single['time']
        ?>
    </p>
    
</div>