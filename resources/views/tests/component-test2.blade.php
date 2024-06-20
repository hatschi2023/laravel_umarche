
<x-tests.app>
    <x-slot name="header">ヘッダー2</x-slot>

    コンポーネントテスト2
    <x-tests.test-class-base-component classBaseMessage="メッセージです"/>
    <div class="mb-4"></div>
    <x-tests.test-class-base-component classBaseMessage="メッセージです" defaultMessage="初期値から変更しています"/>

</x-tests.app>
