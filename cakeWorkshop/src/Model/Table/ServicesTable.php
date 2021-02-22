<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Services Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Service get($primaryKey, $options = [])
 * @method \App\Model\Entity\Service newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Service[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Service|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Service saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Service patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Service[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Service findOrCreate($search, callable $callback = null, $options = [])
 */
class ServicesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('services');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmptyString('name');

        $validator
            ->scalar('type')
            ->maxLength('type', 100)
            ->allowEmptyString('type');

        $validator
            ->scalar('customer_type')
            ->maxLength('customer_type', 100)
            ->allowEmptyString('customer_type');

        $validator
            ->scalar('processing_time')
            ->maxLength('processing_time', 50)
            ->allowEmptyString('processing_time');

        $validator
            ->scalar('eservice')
            ->maxLength('eservice', 50)
            ->allowEmptyString('eservice');

        $validator
            ->scalar('access_url')
            ->maxLength('access_url', 255)
            ->allowEmptyString('access_url');

        $validator
            ->scalar('technology')
            ->maxLength('technology', 255)
            ->allowEmptyString('technology');

        $validator
            ->integer('no_of_user')
            ->allowEmptyString('no_of_user');

        $validator
            ->scalar('major_features')
            ->allowEmptyString('major_features');

        $validator
            ->scalar('access_point')
            ->maxLength('access_point', 255)
            ->allowEmptyString('access_point');

        $validator
            ->scalar('payment')
            ->maxLength('payment', 255)
            ->allowEmptyString('payment');

        $validator
            ->scalar('focal_person_name')
            ->maxLength('focal_person_name', 100)
            ->allowEmptyString('focal_person_name');

        $validator
            ->scalar('focal_person_designation')
            ->maxLength('focal_person_designation', 255)
            ->allowEmptyString('focal_person_designation');

        $validator
            ->scalar('focal_person_phone')
            ->maxLength('focal_person_phone', 11)
            ->allowEmptyString('focal_person_phone');

        $validator
            ->scalar('focal_person_email')
            ->maxLength('focal_person_email', 100)
            ->allowEmptyString('focal_person_email');

        $validator
            ->integer('updated_by')
            ->allowEmptyString('updated_by');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at', false);

        $validator
            ->dateTime('updated_at')
            ->allowEmptyDateTime('updated_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
