<?php

    class Api{

        public static function pills(){
            echo '[{"pid":"84","datetime":"2020-02-24 05:13:30","content":"\u4f60\u5e94\u5f53\u641e\u6e05\u695a\u91cc\u9762\u7684\u903b\u8f91\uff0c\u5982\u4f55\u5b9e\u73b0\u53c2\u6570\u7684\u4f20\u9012\uff0c\u56de\u8c03\u51fd\u6570\u5230\u5e95\u600e\u4e48\u5199\uff0c\u8fd9\u4e9b\u90fd\u5e94\u8be5\u82b1\u65f6\u95f4\u597d\u597d\u8003\u8651\u4ee5\u4e0b #javascipt \r\n#vue ","type":"qubble","bookid":null,"uid":"1"},{"pid":"83","datetime":"2020-02-24 03:26:06","content":"#\u6570\u7f8a\u65e5\u8bb0 \u662f\u6211\u521b\u5efa\u7684\u7b2c\u4e00\u4e2a\u8bdd\u9898","type":"qubble","bookid":null,"uid":"1"},{"pid":"82","datetime":"2020-01-19 15:04:34","content":"hehe #lost","type":"qubble","bookid":null,"uid":"1"}]';
        }

        public static function tag(){
            echo '[{"pid":"84","datetime":"2020-02-24 05:13:30","content":"\u4f60\u5e94\u5f53\u641e\u6e05\u695a\u91cc\u9762\u7684\u903b\u8f91\uff0c\u5982\u4f55\u5b9e\u73b0\u53c2\u6570\u7684\u4f20\u9012\uff0c\u56de\u8c03\u51fd\u6570\u5230\u5e95\u600e\u4e48\u5199\uff0c\u8fd9\u4e9b\u90fd\u5e94\u8be5\u82b1\u65f6\u95f4\u597d\u597d\u8003\u8651\u4ee5\u4e0b #javascipt \r\n#vue ","type":"qubble","bookid":null,"uid":"1"}]';
        }

    }


    $get = isset($_GET)?$_GET:'pills';
    if(@$get['tag']){
        return $content = Api::tag();
    }else{
        return $content = Api::pills();
    }

