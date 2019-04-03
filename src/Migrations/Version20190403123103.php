<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190403123103 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE picture ADD deleted TINYINT(1) DEFAULT NULL, ADD deleted_at DATETIME DEFAULT NULL, CHANGE path path VARCHAR(255) NOT NULL');
        $this->addSql('CREATE INDEX creation_date ON picture (created_at)');
        $this->addSql('ALTER TABLE user CHANGE term_accapted term_accepted TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX creation_date ON picture');
        $this->addSql('ALTER TABLE picture DROP deleted, DROP deleted_at, CHANGE path path VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user CHANGE term_accepted term_accapted TINYINT(1) DEFAULT NULL');
    }
}
