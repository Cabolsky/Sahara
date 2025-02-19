<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250219104744 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_EMAIL ON `admin`');
        $this->addSql('ALTER TABLE `admin` CHANGE email username VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME ON `admin` (username)');
        $this->addSql('ALTER TABLE circuits CHANGE prix prix VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE excursions CHANGE prix prix VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_USERNAME ON `admin`');
        $this->addSql('ALTER TABLE `admin` CHANGE username email VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON `admin` (email)');
        $this->addSql('ALTER TABLE circuits CHANGE prix prix NUMERIC(10, 2) NOT NULL');
        $this->addSql('ALTER TABLE excursions CHANGE prix prix NUMERIC(10, 2) NOT NULL');
    }
}
