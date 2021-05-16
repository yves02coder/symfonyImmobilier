<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210512081957 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, user_name VARCHAR(255) NOT NULL, email_user VARCHAR(255) NOT NULL, password_user VARCHAR(255) NOT NULL, phone_user INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE immobilier ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE immobilier ADD CONSTRAINT FK_142D24D2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_142D24D2A76ED395 ON immobilier (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE immobilier DROP FOREIGN KEY FK_142D24D2A76ED395');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP INDEX IDX_142D24D2A76ED395 ON immobilier');
        $this->addSql('ALTER TABLE immobilier DROP user_id');
    }
}
