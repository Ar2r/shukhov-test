<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200903071853 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE full_route_role (full_route_id INT NOT NULL, role_id INT NOT NULL, INDEX IDX_922AC78970BBB0CC (full_route_id), INDEX IDX_922AC789D60322AC (role_id), PRIMARY KEY(full_route_id, role_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE full_route_role ADD CONSTRAINT FK_922AC78970BBB0CC FOREIGN KEY (full_route_id) REFERENCES full_route (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE full_route_role ADD CONSTRAINT FK_922AC789D60322AC FOREIGN KEY (role_id) REFERENCES role (id) ON DELETE CASCADE');

        $this->addSql("INSERT INTO `full_route_role` VALUES (1, 1)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (3, 1)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (4, 2)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (5, 2)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (6, 2)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (7, 3)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (8, 4)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (9, 4)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (9, 3)");
        $this->addSql("INSERT INTO `full_route_role` VALUES (10, 4)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE full_route_role');
    }
}