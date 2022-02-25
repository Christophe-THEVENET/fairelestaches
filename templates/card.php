<div class="card m-2" style="width: 250px;">
    <div class="card-body shadow-sm p-3">
        <h5 class="card-title" style="color:<?= $list['color'] ?>"><?= $list['name'] ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
        <a href="../model/delete.php?id=<?= $list['id'] ?>" class="btn btn-danger float-right m-1" style="font-size: 8px; font-weight:bold; padding: 3px">Supprimer</a>
        <a href="../model/update.php?id=<?= $list['id'] ?>" class="btn btn-warning float-right m-1 text-white" style="font-size: 8px; font-weight:bold; padding: 3px">Modifier</a>
    </div>
</div>