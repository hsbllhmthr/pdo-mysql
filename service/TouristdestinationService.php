<?php

interface TouristdestinationDao {
    public function insert(Touristdestination $f): void;
    public function update(Touristdestination $f): void;
    public function delete(int $id): void;
    public function getATouristdestinationById(int $id): ?Touristdestination;
    public function getAllTouristdestination(): array;
}

class TouristdestinationService implements TouristdestinationDao{
    public function insert(Touristdestination $T): void{
        try{
            $sql = "insert into Touristdestination values (?,?,?,?,?,?)";
            PDOUtil::getMySQLConnection()->prepare($sql)->execute([
                $T->getId(), 
                $T->getName(), 
                $T->getAddress(), 
                $T->getCity(), 
                $T->getdestinationType(),
                $T->getCountry()
            ]);
        }
        catch(PDOException $e){
            die("error: {$e->getMessage()}");
        }
    }
    
    public function update(Touristdestination $T): void{
        try{
            $sql = "update touristdestination set name=?, address=?, city=?, destinationtype=?, country=? where id=?";
            PDOUtil::getMySQLConnection()->prepare($sql)->execute([
                $T->getName(), 
                $T->getAddress(), 
                $T->getCity(), 
                $T->getdestinationType(),
                $T->getCountry(), 
                $T->getId()
            ]);
        }
        catch(PDOException $e){
            die("error: {$e->getMessage()}");
        }
    }
    
    public function delete(int $id): void{
        try{
            $sql = "delete from touristdestination where id=?";
            PDOUtil::getMySQLConnection()->prepare($sql)->execute([$id]);
        }
        catch(PDOException $e){
            die("error: {$e->getMessage()}");
        }
    }

    public function getATouristdestinationById(int $id): ?Touristdestination{
        $result = null;
        try{
            $sql = "select * from touristdestination where id=?";
            $q = PDOUtil::getMySQLConnection()->prepare($sql);
            $q->execute([$id]);
            if($r = $q->fetch()) {
                $result = new Touristdestination(
                    $r['id'], 
                    $r['name'],      
                    $r['address'], 
                    $r['city'], 
                    $r['destinationtype'], 
                    $r['country']
                );
            }
        }
        catch (PDOException $e) {
            die("error: {$e->getMessage()}");
        }

        return $result;
    }

    public function getAllTouristdestination(): array{
        $result = [];
        try{
            $sql = "select * from touristdestination";
            $q = PDOUtil::getMySQLConnection()->prepare($sql);
            $q->execute();
            while($r=$q->fetch()) {
                $result[] = new Touristdestination(
                    $r['id'], 
                    $r['name'],      
                    $r['address'], 
                    $r['city'], 
                    $r['destinationtype'], 
                    $r['country']
                );
            }
        }
        catch(PDOException $e){
            die("error: {$e->getMessage()}");
        }

        return $result;
    }
}
?>