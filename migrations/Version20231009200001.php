<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231009200001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allergen_recipes DROP INDEX UNIQ_695F197E711662F1, ADD INDEX IDX_695F197E711662F1 (allergens_id)');
        $this->addSql('ALTER TABLE allergen_recipes DROP INDEX UNIQ_695F197EFDF2B1FA, ADD INDEX IDX_695F197EFDF2B1FA (recipes_id)');
        $this->addSql('ALTER TABLE diet_recipes DROP INDEX UNIQ_539AB8E99B4CB3A8, ADD INDEX IDX_539AB8E99B4CB3A8 (diets_id)');
        $this->addSql('ALTER TABLE diet_recipes DROP INDEX UNIQ_539AB8E9FDF2B1FA, ADD INDEX IDX_539AB8E9FDF2B1FA (recipes_id)');
        $this->addSql('ALTER TABLE user_diets DROP INDEX UNIQ_C23FF0FE67B3B43D, ADD INDEX IDX_C23FF0FE67B3B43D (users_id)');
        $this->addSql('ALTER TABLE user_diets DROP INDEX UNIQ_C23FF0FE9B4CB3A8, ADD INDEX IDX_C23FF0FE9B4CB3A8 (diets_id)');
        $this->addSql('ALTER TABLE user_allergens DROP INDEX UNIQ_6717125067B3B43D, ADD INDEX IDX_6717125067B3B43D (users_id)');
        $this->addSql('ALTER TABLE user_allergens DROP INDEX UNIQ_67171250711662F1, ADD INDEX IDX_67171250711662F1 (allergens_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allergen_recipes DROP INDEX IDX_695F197E711662F1, ADD UNIQUE INDEX UNIQ_695F197E711662F1 (allergens_id)');
        $this->addSql('ALTER TABLE allergen_recipes DROP INDEX IDX_695F197EFDF2B1FA, ADD UNIQUE INDEX UNIQ_695F197EFDF2B1FA (recipes_id)');
        $this->addSql('ALTER TABLE user_diets DROP INDEX IDX_C23FF0FE67B3B43D, ADD UNIQUE INDEX UNIQ_C23FF0FE67B3B43D (users_id)');
        $this->addSql('ALTER TABLE user_diets DROP INDEX IDX_C23FF0FE9B4CB3A8, ADD UNIQUE INDEX UNIQ_C23FF0FE9B4CB3A8 (diets_id)');
        $this->addSql('ALTER TABLE diet_recipes DROP INDEX IDX_539AB8E99B4CB3A8, ADD UNIQUE INDEX UNIQ_539AB8E99B4CB3A8 (diets_id)');
        $this->addSql('ALTER TABLE diet_recipes DROP INDEX IDX_539AB8E9FDF2B1FA, ADD UNIQUE INDEX UNIQ_539AB8E9FDF2B1FA (recipes_id)');
        $this->addSql('ALTER TABLE user_allergens DROP INDEX IDX_6717125067B3B43D, ADD UNIQUE INDEX UNIQ_6717125067B3B43D (users_id)');
        $this->addSql('ALTER TABLE user_allergens DROP INDEX IDX_67171250711662F1, ADD UNIQUE INDEX UNIQ_67171250711662F1 (allergens_id)');
    }
}
