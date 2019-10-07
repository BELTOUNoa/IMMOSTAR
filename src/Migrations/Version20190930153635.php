<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190930153635 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE visite (id INT AUTO_INCREMENT NOT NULL, id_bien_id INT NOT NULL, id_visiteur_id INT NOT NULL, id_date DATETIME NOT NULL, suite VARCHAR(255) NOT NULL, INDEX IDX_B09C8CBB6308117F (id_bien_id), INDEX IDX_B09C8CBB6760FECA (id_visiteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bien (id INT AUTO_INCREMENT NOT NULL, id_type_id INT NOT NULL, nb_piece INT NOT NULL, nb_chambre INT NOT NULL, superficie DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION NOT NULL, chauffage VARCHAR(50) NOT NULL, année INT NOT NULL, localisation VARCHAR(50) NOT NULL, état VARCHAR(255) NOT NULL, INDEX IDX_45EDC3861BD125E3 (id_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visiteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, adresse VARCHAR(70) NOT NULL, telephone VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB6308117F FOREIGN KEY (id_bien_id) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB6760FECA FOREIGN KEY (id_visiteur_id) REFERENCES visiteur (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC3861BD125E3 FOREIGN KEY (id_type_id) REFERENCES type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB6308117F');
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB6760FECA');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC3861BD125E3');
        $this->addSql('DROP TABLE visite');
        $this->addSql('DROP TABLE bien');
        $this->addSql('DROP TABLE visiteur');
        $this->addSql('DROP TABLE type');
    }
}
