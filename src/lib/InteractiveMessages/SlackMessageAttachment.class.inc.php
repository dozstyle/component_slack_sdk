<?php
  class SlackMessageAttachment {
    private $fallback;
    private $callback_id;
    private $actions;
    private $title;
    private $color;
    private $attachment_type;
    private $fields;

    public function __construct($fallback, $callback_id, $title = '', $color = 'good') {
      # Requires
      $this->fallback = $fallback;
      $this->callback_id = $callback_id;
      $this->actions = array();

      # Optionals
      $this->title = $title;
      $this->color = $color;
      $this->attachment_type = 'default';
      $this->fields = array();
    }

    # addActions($action1, [action2 ...])
    public function addActions() {
      $args = func_get_args();
      $cnt = 0;
      foreach ($args as $action) {
        $this->actions[$cnt] = $action;
        $cnt++;
      }
    }

    # addActions($action1, [action2 ...])
    public function addFields() {
      $args = func_get_args();
      $cnt = 0;
      foreach ($args as $field) {
        $this->fields[$cnt] = $field;
        $cnt++;
      }
    }

    public function toArray() {
      $attachment = array(
        'title' => $this->title,
        'fallback' => $this->fallback,
        'callback_id' => $this->callback_id,
        'color' => $this->color,
        'attachment_type' => $this->attachment_type,
        'actions' => $this->actions,
        'fields' => $this->fields
      );
      return $attachment;
    }
  }
?>
