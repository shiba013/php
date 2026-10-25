<?php
$status_codes = [
    [
        'code' => '100',
        'meaning' => 'Continue',
        'description' => 'サーバーがリクエストの受信をし拒否していないことを表す'
    ],
    [
        'code' => '101',
        'meaning' => 'Switching Protocols',
        'description' => 'サーバはプロトコルの切り替えを要求していることを表す'
    ],
    [
        'code' => '102',
        'meaning' => 'Processing',
        'description' => '処理中であることを表す'
    ],
    [
        'code' => '200',
        'meaning' => 'OK',
        'description' => '成功時に返すステータスコードとして最も多用される。GETではbodyにリソースが含まれる。PUTやPOSTではbodyに処理結果が含まれる'
    ],
    [
        'code' => '201',
        'meaning' => 'created',
        'description' => 'ユーザ新規登録、画像アップロード、DBテーブル追加などを実行した際に使用される。'
    ],
    [
        'code' => '202',
        'meaning' => 'Accepted',
        'description' => 'リクエストは受理されたが、処理が完了していないことを示す'
    ],
    [
        'code' => '204',
        'meaning' => 'No Content',
        'description' => 'レスポンスボディが空の時に返す'
    ],
    [
        'code' => '205',
        'meaning' => 'Reset Content',
        'description' => 'ユーザーエージェントの画面をリセットするときに返す'
    ],
    [
        'code' => '300',
        'meaning' => 'Multiple Choices',
        'description' => 'リクエストに対して複数のレスポンスがあることを示す'
    ],
    [
        'code' => '301',
        'meaning' => 'Moved Permanently',
        'description' => 'リクエストされたリソースのURLが恒久的に変更されたことを表す'
    ],
    [
        'code' => '302',
        'meaning' => 'Found',
        'description' => 'リクエストされたリソースのURLが一時的に変更されたことを示す'
    ],
    [
        'code' => '303',
        'meaning' => 'See Other',
        'description' => 'リクエストされたリソースを別のURLで取得できることを示す'
    ],
    [
        'code' => '304',
        'meaning' => 'Not Modified',
        'description' => 'リクエストしたリソースが更新されていないことを示す'
    ],
    [
        'code' => '307',
        'meaning' => 'Temporary Redirect',
        'description' => '一時的にリダイレクトが行われることを示す'
    ],
    [
        'code' => '308',
        'meaning' => 'Permanent Redirect',
        'description' => '恒久的リダイレクトを表す'
    ],
    [
        'code' => '400',
        'meaning' => 'Bad Request',
        'description' => 'リクエストが不正であることを示す。定義されていないメソッドを使用したり、パラメータに間違いがあるなど、クライアントのリクエストが異なる場合に生じる'
    ],
    [
        'code' => '401',
        'meaning' => 'Unauthorized',
        'description' => '認証エラーのこと。ログインが必要なページでIDやパスワードが異なる場合、リクエストに必要なAuthorizationヘッダを含まない場合、アクセストークンが執行・無効・破損している場合などに使用される'
    ],
    [
        'code' => '403',
        'meaning' => 'Forbidden',
        'description' => '認可エラーのこと。認可されていないなどの理由で、クライアントのアクセス権限がなく（ファイルやフォルダの閲覧権限など）、サーバからのレスポンスが拒否された場合に使用される'
    ],
    [
        'code' => '404',
        'meaning' => 'Not Found',
        'description' => 'リクエストされたリソースが存在しないことを表す。URL自体が存在しないのか、取得対象のリソースが存在しなかったなど、Webページが見つからないときに使用される'
    ],
    [
        'code' => '405',
        'meaning' => 'Method Not Allowed',
        'description' => 'エンドポイントは存在するが、許可されていないHTTPメソッドであることを示す'
    ],
    [
        'code' => '408',
        'meaning' => 'Request Timeout',
        'description' => '指定時間内にリクエストが完了しなかったことを表す'
    ],
    [
        'code' => '409',
        'meaning' => 'Conflict',
        'description' => 'リソースの競合が発生した場合に使用される'
    ],
    [
        'code' => '410',
        'meaning' => 'Gone',
        'description' => 'リクエストされたコンテンツがサーバから永久に削除され、転送先アドレスがない場合に使用される'
    ],
    [
        'code' => '413',
        'meaning' => 'Payload Too Large',
        'description' => 'リクエストヘッダ、ボディがサーバで定めている上限をこえたときに使用される'
    ],
    [
        'code' => '414',
        'meaning' => 'URL Too Long',
        'description' => 'クライアントがリクエストしたURLファ、サーバで扱える長さを超えた場合に使用される'
    ],
    [
        'code' => '415',
        'meaning' => 'Unsupported Media Type',
        'description' => 'リクエストされたデータのメディア形式にサーバーが対応しておらず、サーバがリクエストを拒否したことを示す'
    ],
    [
        'code' => '429',
        'meaning' => 'Too Many Requests',
        'description' => 'アクセス回数が許容範囲の限界を超えた場合に返す'
    ],
    [
        'code' => '500',
        'meaning' => 'Internal Server Error',
        'description' => '何らかのサーバエラーが生じたことを表す。サーバー側に異常が発生し、正常なレスポンスが返せないときに使用される。これが表示された際は、サーバ側のログを見て原因究明をする必要がある（クライアント側では解決不能）'
    ],
    [
        'code' => '502',
        'meaning' => 'Bad Gateway',
        'description' => 'ゲートウェイまたはプロシキに問題が生じていることを表す。主にサーバがリクエストを満たすのに必要な機能をサポートしていない場合が多い。'
    ],
    [
        'code' => '503',
        'meaning' => 'Service Unavailable',
        'description' => 'サーバがリクエストを処理する準備ができていない状態を示す'
    ],
    [
        'code' => '504',
        'meaning' => 'Gateway Timeout',
        'description' => 'ゲートウェイとして動作するサーバが指定時間内にレスポンスを得られなかった事を示す'
    ],
    [
        'code' => '505',
        'meaning' => 'HTTP Version Not Supported',
        'description' => 'リクエストしたHTTPプロトコルのバージョンにサーバが対応していないことを示す'
    ],
];
