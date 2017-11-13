<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdminController Controller
 *
 * @property \App\Model\Table\MCategoryTable $MCategory
 *
 * @method \App\Model\Entity\MCategory[] paginate($object = null, array $settings = [])
 */
class AdminController extends AppController
{

    public function isLogin()
    {
    	$session = $this->request->session();
	    $login_session = $session->read('login_user');
        return empty($login_session);
    }
    /**
     * category method
     *
     * @param string|null $id M Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function category()
    {
        $mCategory = $this->paginate($this->MCategory);

        $this->set(compact('mCategory'));
        $this->set('mCategory', $mCategory);
        $this->set('_serialize', ['mCategory']);
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        if (!$this->isLogin()) {
            //
        }
        $this->$page();
        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }
}
