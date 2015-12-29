{foreach from=$tableauArticleSmarty item=tableau}

    <h1>{$tableau['titre']}</h1>
    <p>{$tableau['texte']}</p>
    <img src="img/{$tableau['id']}.jpg" alt="{$tableau['titre']}" width="200px"/>
    <p>{$tableau['date_fr']}</p>
    
{/foreach}

<div class="pagination">
    <ul>
        <li><a>Page : </a></li>
        {for $i=1 to $nbpage}           
        <li><a href="index.php?page={$i}">{$i}</a></li>         
        {/for}
    </ul>
</div>
