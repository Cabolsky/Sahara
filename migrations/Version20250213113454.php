<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250213113454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circuits (id INT AUTO_INCREMENT NOT NULL, photo_cards VARCHAR(255) NOT NULL, titre_cards VARCHAR(255) NOT NULL, texte_cards LONGTEXT NOT NULL, photo_header VARCHAR(255) NOT NULL, ville_depart VARCHAR(255) NOT NULL, ville_arrivee VARCHAR(255) NOT NULL, nombre_personnes INT NOT NULL, duree VARCHAR(255) NOT NULL, hebergement VARCHAR(255) NOT NULL, repas VARCHAR(255) NOT NULL, prix NUMERIC(6, 2) NOT NULL, photo_jour1 VARCHAR(255) NOT NULL, titre_jour1 VARCHAR(255) NOT NULL, texte_jour1 LONGTEXT NOT NULL, photo_jour2 VARCHAR(255) NOT NULL, titre_jour2 VARCHAR(255) NOT NULL, texte_jour2 LONGTEXT NOT NULL, photo_jour3 VARCHAR(255) NOT NULL, titre_jour3 VARCHAR(255) NOT NULL, texte_jour3 LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE circuits');
    }
}
