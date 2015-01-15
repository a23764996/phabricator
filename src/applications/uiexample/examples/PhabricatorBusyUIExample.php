<?php

final class PhabricatorBusyUIExample extends PhabricatorUIExample {

  public function getName() {
    return 'Busy';
  }

  public function getDescription() {
    return 'Busy.';
  }

  public function renderExample() {
    Javelin::initBehavior('phabricator-busy-example');
    return null;
  }
}
