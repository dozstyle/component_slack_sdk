<?php

  namespace DozStyle\Slack\MessageAttachments

  class AttachmentBuilder {
    private $attachments;

    public function __construct() {
      $this->attachments = array();
    }

    # addAttachments($attachment1, [attachment2 ...])
    public function addAttachments() {
      $this->attachments = array();
      $cnt = 0;
      foreach (func_get_args() as $attachment) {
        $this->attachments[$cnt] = $attachment;
        $cnt++;
      }
    }

    public function toArray() {
      return $this->attachments;
    }
  }
?>
