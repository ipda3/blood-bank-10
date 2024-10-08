<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    const CONSTRAINT_NO_ACTION = 'no action';

    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('blood_type_id')->references('id')->on('blood_types')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->foreign('governorate_id')->references('id')->on('governorates')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('client_post', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('client_post', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->foreign('city_id')->references('id')->on('cities')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->foreign('blood_type_id')->references('id')->on('blood_types')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->foreign('donation_request_id')->references('id')->on('donation_requests')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('client_notification', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('client_notification', function (Blueprint $table) {
            $table->foreign('notification_id')->references('id')->on('notifications')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('blood_type_client', function (Blueprint $table) {
            $table->foreign('blood_type_id')->references('id')->on('blood_types')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('blood_type_client', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
        Schema::table('client_governorate', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
        Schema::table('client_governorate', function (Blueprint $table) {
            $table->foreign('governorate_id')->references('id')->on('governorates')
                ->onDelete(self::CONSTRAINT_NO_ACTION)
                ->onUpdate(self::CONSTRAINT_NO_ACTION);
        });
    }

    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign('clients_blood_type_id_foreign');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->dropForeign('clients_city_id_foreign');
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->dropForeign('cities_governorate_id_foreign');
        });
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_category_id_foreign');
        });
        Schema::table('client_post', function (Blueprint $table) {
            $table->dropForeign('client_post_client_id_foreign');
        });
        Schema::table('client_post', function (Blueprint $table) {
            $table->dropForeign('client_post_post_id_foreign');
        });
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->dropForeign('donation_requests_city_id_foreign');
        });
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->dropForeign('donation_requests_blood_type_id_foreign');
        });
        Schema::table('donation_requests', function (Blueprint $table) {
            $table->dropForeign('donation_requests_client_id_foreign');
        });
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropForeign('notifications_donation_request_id_foreign');
        });
        Schema::table('client_notification', function (Blueprint $table) {
            $table->dropForeign('client_notification_client_id_foreign');
        });
        Schema::table('client_notification', function (Blueprint $table) {
            $table->dropForeign('client_notification_notification_id_foreign');
        });
        Schema::table('blood_type_client', function (Blueprint $table) {
            $table->dropForeign('blood_type_client_blood_type_id_foreign');
        });
        Schema::table('blood_type_client', function (Blueprint $table) {
            $table->dropForeign('blood_type_client_client_id_foreign');
        });
        Schema::table('client_governorate', function (Blueprint $table) {
            $table->dropForeign('client_governorate_client_id_foreign');
        });
        Schema::table('client_governorate', function (Blueprint $table) {
            $table->dropForeign('client_governorate_governorate_id_foreign');
        });
    }
};
